/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IVet } from "../../interfaces/interfaces";

type IBody = IVet;

export const readVet = async (): Promise<IBody[] | null> => {
  const result: IBody[] | null = await customFetch.get({
    url: `/vets`,
  });
  return result;
};

