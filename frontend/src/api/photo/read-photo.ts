/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IPhoto } from "../../interfaces/interfaces";

type IBody = IPhoto;

export const readPhoto = async (): Promise<IBody[] | null> => {
  const result: IBody[] | null = await customFetch.get({
    url: `/photos`,
  });
  return result;
};

